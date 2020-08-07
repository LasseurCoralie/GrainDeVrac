import styled from 'styled-components';
import theme from '../../../theme/theme';

const PlanningTitleStyled = styled.div`
  h3 {
    text-align: center;
    background-color: ${theme.colors.orange};
    padding: .5em 0;
    color: white;
    text-transform: uppercase;
    font-size: 1rem;
    border-top: 1px solid ${theme.colors.black};
    border-bottom: 1px solid ${theme.colors.black};
  }
`;

export default PlanningTitleStyled;