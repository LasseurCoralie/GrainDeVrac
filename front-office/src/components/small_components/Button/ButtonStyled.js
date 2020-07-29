import styled from 'styled-components';
import theme from '../../../theme/theme';

const ButtonStyled = styled.div`
  button {
    background-color: ${theme.colors.orange};
    font-family: ${theme.fonts.special};
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    border: none;
    padding: 16px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    cursor: pointer;

  }

  @media (min-width: 900px) {
    button {

      transition: all .5s;
      transition-timing-function: cubic-bezier(.17,.84,.44,1);

      :hover {
        background-color: ${theme.colors.purple};
        transform: scale(1.1, 1.1);
      }

    }
  }
`;

export default ButtonStyled;