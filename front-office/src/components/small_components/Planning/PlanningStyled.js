import styled from 'styled-components';
import theme from '../../../theme/theme';

const PlanningStyled = styled.div`
  margin : 0 1em;

  table, th, td {
    border: 1px solid ${theme.colors.black};
    border-collapse: collapse;;
  }

  table {
    width: 100%;
    margin: 2em 0;

    td, th {
      padding: 8px;
      text-align: center;
    }
    
    tr.tr-top>th, tr.tr-top>td{
      border-top: 1px solid white;
    }

    tr.tr-down>th, tr.tr-down>td{
      border-bottom: 1px solid white;
    }

    td.delivery {
      background-color: ${theme.colors.lightOrange};
      font-family: ${theme.fonts.special};
      font-weight: bold;
    }

    td.today {
      border: 2px solid ${theme.colors.orange}
    }

    td:first-child, th:first-child {
      border-left: 1px solid white;
    }

    td:last-child, th:last-child {
      border-right: 1px solid white;
    }

    td>strong.market-place {
      font-family: ${theme.fonts.special};
      font-weight: bold;
    }
  }
`;

export default PlanningStyled;